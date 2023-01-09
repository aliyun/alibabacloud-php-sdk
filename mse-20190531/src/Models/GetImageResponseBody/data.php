<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The full version number of the current instance image. The parameter is in the X.X.X.X format.
     *
     * @example 3.5.5.0
     *
     * @var string
     */
    public $currentVersionFullShowName;

    /**
     * @description The URL of the changelog for the maximum version to which the current version can be upgraded.
     *
     * @example https://xxxxx
     *
     * @var string
     */
    public $maxVersionChangelogUrl;

    /**
     * @description The code of the maximum version to which the current version can be upgraded.
     *
     * @example ZooKeeper_3_6_3
     *
     * @var string
     */
    public $maxVersionCode;

    /**
     * @description The full number of the maximum version to which the current version can be upgraded.
     *
     * @example 3.6.3.0
     *
     * @var string
     */
    public $maxVersionFullShowName;
    protected $_name = [
        'currentVersionFullShowName' => 'CurrentVersionFullShowName',
        'maxVersionChangelogUrl'     => 'MaxVersionChangelogUrl',
        'maxVersionCode'             => 'MaxVersionCode',
        'maxVersionFullShowName'     => 'MaxVersionFullShowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentVersionFullShowName) {
            $res['CurrentVersionFullShowName'] = $this->currentVersionFullShowName;
        }
        if (null !== $this->maxVersionChangelogUrl) {
            $res['MaxVersionChangelogUrl'] = $this->maxVersionChangelogUrl;
        }
        if (null !== $this->maxVersionCode) {
            $res['MaxVersionCode'] = $this->maxVersionCode;
        }
        if (null !== $this->maxVersionFullShowName) {
            $res['MaxVersionFullShowName'] = $this->maxVersionFullShowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentVersionFullShowName'])) {
            $model->currentVersionFullShowName = $map['CurrentVersionFullShowName'];
        }
        if (isset($map['MaxVersionChangelogUrl'])) {
            $model->maxVersionChangelogUrl = $map['MaxVersionChangelogUrl'];
        }
        if (isset($map['MaxVersionCode'])) {
            $model->maxVersionCode = $map['MaxVersionCode'];
        }
        if (isset($map['MaxVersionFullShowName'])) {
            $model->maxVersionFullShowName = $map['MaxVersionFullShowName'];
        }

        return $model;
    }
}
