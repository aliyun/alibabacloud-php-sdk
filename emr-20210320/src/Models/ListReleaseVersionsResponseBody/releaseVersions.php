<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListReleaseVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class releaseVersions extends Model
{
    /**
     * @var string
     */
    public $iaasType;
    /**
     * @var string
     */
    public $releaseVersion;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
