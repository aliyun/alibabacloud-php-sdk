<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\GetContactsResponseBody\datapoints;

use AlibabaCloud\Dara\Model;

class contacts extends Model
{
    /**
     * @var string[]
     */
    public $contact;
    protected $_name = [
        'contact' => 'Contact',
    ];

    public function validate()
    {
        if (\is_array($this->contact)) {
            Model::validateArray($this->contact);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contact) {
            if (\is_array($this->contact)) {
                $res['Contact'] = [];
                $n1 = 0;
                foreach ($this->contact as $item1) {
                    $res['Contact'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Contact'])) {
            if (!empty($map['Contact'])) {
                $model->contact = [];
                $n1 = 0;
                foreach ($map['Contact'] as $item1) {
                    $model->contact[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
