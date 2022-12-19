<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckResultResponseBody\list_;

use AlibabaCloud\Tea\Model;

class riskItemResources extends Model
{
    /**
     * @description The details about the check result.
     *
     * @var mixed[]
     */
    public $contentResource;

    /**
     * @description The title in the details. Valid values:
     *
     *   **bestPractice**: description
     *   **influence**: risk
     *   **suggestion**: solution
     *   **helpResource**: reference
     *
     * @example bestPractice
     *
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'contentResource' => 'ContentResource',
        'resourceName'    => 'ResourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentResource) {
            $res['ContentResource'] = $this->contentResource;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskItemResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentResource'])) {
            $model->contentResource = $map['ContentResource'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
