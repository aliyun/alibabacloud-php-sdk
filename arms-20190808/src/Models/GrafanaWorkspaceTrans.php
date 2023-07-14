<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceTrans extends Model
{
    /**
     * @var string
     */
    public $apiUrl;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var float
     */
    public $gmtCreate;

    /**
     * @var float
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $grafanaWorkspaceId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $processStatus;

    /**
     * @var GrafanaWorkspaceTransDetail[]
     */
    public $transDetails;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'apiUrl'             => 'apiUrl',
        'authType'           => 'authType',
        'gmtCreate'          => 'gmtCreate',
        'gmtModified'        => 'gmtModified',
        'grafanaWorkspaceId' => 'grafanaWorkspaceId',
        'id'                 => 'id',
        'msg'                => 'msg',
        'processStatus'      => 'processStatus',
        'transDetails'       => 'transDetails',
        'userId'             => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiUrl) {
            $res['apiUrl'] = $this->apiUrl;
        }
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->grafanaWorkspaceId) {
            $res['grafanaWorkspaceId'] = $this->grafanaWorkspaceId;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }
        if (null !== $this->processStatus) {
            $res['processStatus'] = $this->processStatus;
        }
        if (null !== $this->transDetails) {
            $res['transDetails'] = [];
            if (null !== $this->transDetails && \is_array($this->transDetails)) {
                $n = 0;
                foreach ($this->transDetails as $item) {
                    $res['transDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceTrans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiUrl'])) {
            $model->apiUrl = $map['apiUrl'];
        }
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['grafanaWorkspaceId'])) {
            $model->grafanaWorkspaceId = $map['grafanaWorkspaceId'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }
        if (isset($map['processStatus'])) {
            $model->processStatus = $map['processStatus'];
        }
        if (isset($map['transDetails'])) {
            if (!empty($map['transDetails'])) {
                $model->transDetails = [];
                $n                   = 0;
                foreach ($map['transDetails'] as $item) {
                    $model->transDetails[$n++] = null !== $item ? GrafanaWorkspaceTransDetail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
