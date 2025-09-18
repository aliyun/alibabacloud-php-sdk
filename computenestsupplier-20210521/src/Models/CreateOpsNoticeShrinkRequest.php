<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class CreateOpsNoticeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attributesShrink;

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
        'attributesShrink' => 'Attributes',
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
        if (\is_array($this->serviceVersion)) {
            Model::validateArray($this->serviceVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributesShrink) {
            $res['Attributes'] = $this->attributesShrink;
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
            $model->attributesShrink = $map['Attributes'];
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
