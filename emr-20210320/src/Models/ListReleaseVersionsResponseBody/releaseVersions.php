<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListReleaseVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class releaseVersions extends Model
{
    /**
     * @description The IaaS type.
     *
     * @example ECS
     *
     * @var string
     */
    public $iaasType;

    /**
     * @description The EMR version.
     *
     * @example EMR-5.3.0
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @description The version series.
     *
     * @example EMR-6.X
     *
     * @var string
     */
    public $series;
    protected $_name = [
        'iaasType'       => 'IaasType',
        'releaseVersion' => 'ReleaseVersion',
        'series'         => 'Series',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iaasType) {
            $res['IaasType'] = $this->iaasType;
        }
        if (null !== $this->releaseVersion) {
            $res['ReleaseVersion'] = $this->releaseVersion;
        }
        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return releaseVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IaasType'])) {
            $model->iaasType = $map['IaasType'];
        }
        if (isset($map['ReleaseVersion'])) {
            $model->releaseVersion = $map['ReleaseVersion'];
        }
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }

        return $model;
    }
}
