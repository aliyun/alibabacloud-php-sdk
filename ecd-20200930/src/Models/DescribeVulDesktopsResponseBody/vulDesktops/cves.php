<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulDesktopsResponseBody\vulDesktops;

use AlibabaCloud\Dara\Model;

class cves extends Model
{
    /**
     * @var string
     */
    public $cveId;

    /**
     * @var string
     */
    public $cveLevel;

    /**
     * @var string
     */
    public $cveTitle;

    /**
     * @var string
     */
    public $cveUrl;

    /**
     * @var string
     */
    public $impactScore;

    /**
     * @var string
     */
    public $referenceUrl;

    /**
     * @var string
     */
    public $releaseTime;
    protected $_name = [
        'cveId' => 'CveId',
        'cveLevel' => 'CveLevel',
        'cveTitle' => 'CveTitle',
        'cveUrl' => 'CveUrl',
        'impactScore' => 'ImpactScore',
        'referenceUrl' => 'ReferenceUrl',
        'releaseTime' => 'ReleaseTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }

        if (null !== $this->cveLevel) {
            $res['CveLevel'] = $this->cveLevel;
        }

        if (null !== $this->cveTitle) {
            $res['CveTitle'] = $this->cveTitle;
        }

        if (null !== $this->cveUrl) {
            $res['CveUrl'] = $this->cveUrl;
        }

        if (null !== $this->impactScore) {
            $res['ImpactScore'] = $this->impactScore;
        }

        if (null !== $this->referenceUrl) {
            $res['ReferenceUrl'] = $this->referenceUrl;
        }

        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
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
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }

        if (isset($map['CveLevel'])) {
            $model->cveLevel = $map['CveLevel'];
        }

        if (isset($map['CveTitle'])) {
            $model->cveTitle = $map['CveTitle'];
        }

        if (isset($map['CveUrl'])) {
            $model->cveUrl = $map['CveUrl'];
        }

        if (isset($map['ImpactScore'])) {
            $model->impactScore = $map['ImpactScore'];
        }

        if (isset($map['ReferenceUrl'])) {
            $model->referenceUrl = $map['ReferenceUrl'];
        }

        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        return $model;
    }
}
