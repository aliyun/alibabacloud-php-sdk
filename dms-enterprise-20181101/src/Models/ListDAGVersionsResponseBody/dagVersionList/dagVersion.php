<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDAGVersionsResponseBody\dagVersionList;

use AlibabaCloud\Tea\Model;

class dagVersion extends Model
{
    /**
     * @var string
     */
    public $dagName;

    /**
     * @var string
     */
    public $dagOwnerId;

    /**
     * @var string
     */
    public $dagOwnerNickName;

    /**
     * @var int
     */
    public $lastVersionId;

    /**
     * @var string
     */
    public $versionComments;

    /**
     * @var int
     */
    public $versionId;
    protected $_name = [
        'dagName'          => 'DagName',
        'dagOwnerId'       => 'DagOwnerId',
        'dagOwnerNickName' => 'DagOwnerNickName',
        'lastVersionId'    => 'LastVersionId',
        'versionComments'  => 'VersionComments',
        'versionId'        => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagName) {
            $res['DagName'] = $this->dagName;
        }
        if (null !== $this->dagOwnerId) {
            $res['DagOwnerId'] = $this->dagOwnerId;
        }
        if (null !== $this->dagOwnerNickName) {
            $res['DagOwnerNickName'] = $this->dagOwnerNickName;
        }
        if (null !== $this->lastVersionId) {
            $res['LastVersionId'] = $this->lastVersionId;
        }
        if (null !== $this->versionComments) {
            $res['VersionComments'] = $this->versionComments;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dagVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagName'])) {
            $model->dagName = $map['DagName'];
        }
        if (isset($map['DagOwnerId'])) {
            $model->dagOwnerId = $map['DagOwnerId'];
        }
        if (isset($map['DagOwnerNickName'])) {
            $model->dagOwnerNickName = $map['DagOwnerNickName'];
        }
        if (isset($map['LastVersionId'])) {
            $model->lastVersionId = $map['LastVersionId'];
        }
        if (isset($map['VersionComments'])) {
            $model->versionComments = $map['VersionComments'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
