<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterVersionResponseBody;

use AlibabaCloud\Tea\Model;

class proxyRevisionVersionList extends Model
{
    /**
     * @var string
     */
    public $releaseNote;

    /**
     * @var string
     */
    public $releaseType;

    /**
     * @var string
     */
    public $revisionVersionCode;

    /**
     * @var string
     */
    public $revisionVersionName;
    protected $_name = [
        'releaseNote'         => 'ReleaseNote',
        'releaseType'         => 'ReleaseType',
        'revisionVersionCode' => 'RevisionVersionCode',
        'revisionVersionName' => 'RevisionVersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->releaseType) {
            $res['ReleaseType'] = $this->releaseType;
        }
        if (null !== $this->revisionVersionCode) {
            $res['RevisionVersionCode'] = $this->revisionVersionCode;
        }
        if (null !== $this->revisionVersionName) {
            $res['RevisionVersionName'] = $this->revisionVersionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxyRevisionVersionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['ReleaseType'])) {
            $model->releaseType = $map['ReleaseType'];
        }
        if (isset($map['RevisionVersionCode'])) {
            $model->revisionVersionCode = $map['RevisionVersionCode'];
        }
        if (isset($map['RevisionVersionName'])) {
            $model->revisionVersionName = $map['RevisionVersionName'];
        }

        return $model;
    }
}
