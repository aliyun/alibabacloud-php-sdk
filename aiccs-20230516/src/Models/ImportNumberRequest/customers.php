<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\ImportNumberRequest;

use AlibabaCloud\Dara\Model;

class customers extends Model
{
    /**
     * @var string
     */
    public $clientUrl;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $numberMD5;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'clientUrl' => 'ClientUrl',
        'number' => 'Number',
        'numberMD5' => 'NumberMD5',
        'properties' => 'Properties',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientUrl) {
            $res['ClientUrl'] = $this->clientUrl;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->numberMD5) {
            $res['NumberMD5'] = $this->numberMD5;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['ClientUrl'])) {
            $model->clientUrl = $map['ClientUrl'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['NumberMD5'])) {
            $model->numberMD5 = $map['NumberMD5'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
