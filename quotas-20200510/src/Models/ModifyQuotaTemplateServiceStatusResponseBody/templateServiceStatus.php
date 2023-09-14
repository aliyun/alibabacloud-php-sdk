<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyQuotaTemplateServiceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class templateServiceStatus extends Model
{
    /**
     * @description The ID of the resource directory.
     *
     * @example rd-pG****
     *
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @description The state of the quota template. Valid values:
     *
     *   \-1: The quota template is disabled.
     *   1: The quota template is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $serviceStatus;
    protected $_name = [
        'resourceDirectoryId' => 'ResourceDirectoryId',
        'serviceStatus'       => 'ServiceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateServiceStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }

        return $model;
    }
}
