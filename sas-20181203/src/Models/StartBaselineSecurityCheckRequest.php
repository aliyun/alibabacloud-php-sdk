<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class StartBaselineSecurityCheckRequest extends Model
{
    /**
     * @description The IDs of the check items.
     *
     * > To perform a check task on cloud service configurations, you must specify the ID of the check item. You can call the [DescribeRiskItemType](~~DescribeRiskItemType~~) operation to query the IDs of check items.
     * @var int[]
     */
    public $itemIds;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The source IP address of the request.
     *
     * @example 106.11.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the check task. Valid values:
     *
     *   **check**
     *   **verify**
     *
     * This parameter is required.
     * @example verify
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'itemIds'         => 'ItemIds',
        'lang'            => 'Lang',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIp'        => 'SourceIp',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemIds) {
            $res['ItemIds'] = $this->itemIds;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartBaselineSecurityCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemIds'])) {
            if (!empty($map['ItemIds'])) {
                $model->itemIds = $map['ItemIds'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
