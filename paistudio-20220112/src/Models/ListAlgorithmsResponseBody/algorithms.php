<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmsResponseBody;

use AlibabaCloud\Tea\Model;

class algorithms extends Model
{
    /**
     * @var string
     */
    public $algorithmDescription;

    /**
     * @example algo-sidjc8134hv
     *
     * @var string
     */
    public $algorithmId;

    /**
     * @example llm_train
     *
     * @var string
     */
    public $algorithmName;

    /**
     * @example pai
     *
     * @var string
     */
    public $algorithmProvider;

    /**
     * @example LLM Train
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 2023-07-21T03:35:24Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2023-07-25T02:15:40Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $userId;

    /**
     * @example 12345
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'algorithmDescription' => 'AlgorithmDescription',
        'algorithmId' => 'AlgorithmId',
        'algorithmName' => 'AlgorithmName',
        'algorithmProvider' => 'AlgorithmProvider',
        'displayName' => 'DisplayName',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'userId' => 'UserId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmDescription) {
            $res['AlgorithmDescription'] = $this->algorithmDescription;
        }
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }
        if (null !== $this->algorithmProvider) {
            $res['AlgorithmProvider'] = $this->algorithmProvider;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return algorithms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmDescription'])) {
            $model->algorithmDescription = $map['AlgorithmDescription'];
        }
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }
        if (isset($map['AlgorithmProvider'])) {
            $model->algorithmProvider = $map['AlgorithmProvider'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
