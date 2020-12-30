<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class StartBaselineSecurityCheckRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int[]
     */
    public $itemIds;

    /**
     * @var string[]
     */
    public $assets;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'resourceOwnerId' => 'ResourceOwnerId',
        'lang'            => 'Lang',
        'type'            => 'Type',
        'itemIds'         => 'ItemIds',
        'assets'          => 'Assets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->itemIds) {
            $res['ItemIds'] = $this->itemIds;
        }
        if (null !== $this->assets) {
            $res['Assets'] = $this->assets;
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ItemIds'])) {
            if (!empty($map['ItemIds'])) {
                $model->itemIds = $map['ItemIds'];
            }
        }
        if (isset($map['Assets'])) {
            if (!empty($map['Assets'])) {
                $model->assets = $map['Assets'];
            }
        }

        return $model;
    }
}
