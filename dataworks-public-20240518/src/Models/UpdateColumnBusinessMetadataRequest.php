<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateColumnBusinessMetadataRequest extends Model
{
    /**
     * @var string[][]
     */
    public $customAttributes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'customAttributes' => 'CustomAttributes',
        'description' => 'Description',
        'id' => 'Id',
    ];

    public function validate()
    {
        if (\is_array($this->customAttributes)) {
            Model::validateArray($this->customAttributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customAttributes) {
            if (\is_array($this->customAttributes)) {
                $res['CustomAttributes'] = [];
                foreach ($this->customAttributes as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['CustomAttributes'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['CustomAttributes'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['CustomAttributes'])) {
            if (!empty($map['CustomAttributes'])) {
                $model->customAttributes = [];
                foreach ($map['CustomAttributes'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->customAttributes[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->customAttributes[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
