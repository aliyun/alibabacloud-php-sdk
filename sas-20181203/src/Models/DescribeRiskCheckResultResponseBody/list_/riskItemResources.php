<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckResultResponseBody\list_;

use AlibabaCloud\Dara\Model;

class riskItemResources extends Model
{
    /**
     * @var mixed[]
     */
    public $contentResource;
    /**
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'contentResource' => 'ContentResource',
        'resourceName'    => 'ResourceName',
    ];

    public function validate()
    {
        if (\is_array($this->contentResource)) {
            Model::validateArray($this->contentResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentResource) {
            if (\is_array($this->contentResource)) {
                $res['ContentResource'] = [];
                foreach ($this->contentResource as $key1 => $value1) {
                    $res['ContentResource'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
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
        if (isset($map['ContentResource'])) {
            if (!empty($map['ContentResource'])) {
                $model->contentResource = [];
                foreach ($map['ContentResource'] as $key1 => $value1) {
                    $model->contentResource[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
