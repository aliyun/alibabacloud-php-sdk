<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateBatchUploadUrlRequest extends Model
{
    /**
     * @var string[]
     */
    public $md5List;
    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'md5List' => 'Md5List',
        'type'    => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->md5List)) {
            Model::validateArray($this->md5List);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->md5List) {
            if (\is_array($this->md5List)) {
                $res['Md5List'] = [];
                $n1             = 0;
                foreach ($this->md5List as $item1) {
                    $res['Md5List'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Md5List'])) {
            if (!empty($map['Md5List'])) {
                $model->md5List = [];
                $n1             = 0;
                foreach ($map['Md5List'] as $item1) {
                    $model->md5List[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
