<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class CreateOpsNoticeRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string[]
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $solutions;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'attributes' => 'Attributes',
        'category' => 'Category',
        'clientToken' => 'ClientToken',
        'content' => 'Content',
        'regionId' => 'RegionId',
        'serviceId' => 'ServiceId',
        'serviceVersion' => 'ServiceVersion',
        'severity' => 'Severity',
        'solutions' => 'Solutions',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        if (\is_array($this->serviceVersion)) {
            Model::validateArray($this->serviceVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                foreach ($this->attributes as $key1 => $value1) {
                    $res['Attributes'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceVersion) {
            if (\is_array($this->serviceVersion)) {
                $res['ServiceVersion'] = [];
                $n1 = 0;
                foreach ($this->serviceVersion as $item1) {
                    $res['ServiceVersion'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->solutions) {
            $res['Solutions'] = $this->solutions;
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
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                foreach ($map['Attributes'] as $key1 => $value1) {
                    $model->attributes[$key1] = $value1;
                }
            }
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceVersion'])) {
            if (!empty($map['ServiceVersion'])) {
                $model->serviceVersion = [];
                $n1 = 0;
                foreach ($map['ServiceVersion'] as $item1) {
                    $model->serviceVersion[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['Solutions'])) {
            $model->solutions = $map['Solutions'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
