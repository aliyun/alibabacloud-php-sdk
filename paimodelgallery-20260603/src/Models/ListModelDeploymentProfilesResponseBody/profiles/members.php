<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\ListModelDeploymentProfilesResponseBody\profiles;

use AlibabaCloud\Dara\Model;

class members extends Model
{
    /**
     * @var string
     */
    public $memberType;

    /**
     * @var mixed[]
     */
    public $meta;
    protected $_name = [
        'memberType' => 'MemberType',
        'meta' => 'Meta',
    ];

    public function validate()
    {
        if (\is_array($this->meta)) {
            Model::validateArray($this->meta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberType) {
            $res['MemberType'] = $this->memberType;
        }

        if (null !== $this->meta) {
            if (\is_array($this->meta)) {
                $res['Meta'] = [];
                foreach ($this->meta as $key1 => $value1) {
                    $res['Meta'][$key1] = $value1;
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
        if (isset($map['MemberType'])) {
            $model->memberType = $map['MemberType'];
        }

        if (isset($map['Meta'])) {
            if (!empty($map['Meta'])) {
                $model->meta = [];
                foreach ($map['Meta'] as $key1 => $value1) {
                    $model->meta[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
