<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class LibraryListResult extends Model
{
    /**
     * @var Library[]
     */
    public $librarys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'librarys' => 'librarys',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->librarys)) {
            Model::validateArray($this->librarys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->librarys) {
            if (\is_array($this->librarys)) {
                $res['librarys'] = [];
                $n1 = 0;
                foreach ($this->librarys as $item1) {
                    $res['librarys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['librarys'])) {
            if (!empty($map['librarys'])) {
                $model->librarys = [];
                $n1 = 0;
                foreach ($map['librarys'] as $item1) {
                    $model->librarys[$n1] = Library::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
