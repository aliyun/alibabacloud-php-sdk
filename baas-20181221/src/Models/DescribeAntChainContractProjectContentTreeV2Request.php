<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeAntChainContractProjectContentTreeV2Request extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example M8GaMEyX
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @description This parameter is required.
     *
     * @example 2L9VK68g
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'consortiumId' => 'ConsortiumId',
        'projectId'    => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAntChainContractProjectContentTreeV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
