<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetDetailByIdResponseBody\data;

use AlibabaCloud\Tea\Model;

class vulDetails extends Model
{
    /**
     * @description CVE ID.
     *
     * @example CVE-2022-21291
     *
     * @var string
     */
    public $cveId;

    /**
     * @description The CVSS score of the vulnerability in the Alibaba Cloud vulnerability database.
     *
     * @example 10.0
     *
     * @var string
     */
    public $cvssScore;

    /**
     * @description Fix suggestion.
     *
     * @example https://avd.aliyun.com/detail/CVE-2022-21291
     *
     * @var string
     */
    public $fixSuggestion;

    /**
     * @description Title of the vulnerability announcement.
     *
     * @example Chanjet T-Plus SetupAccount/Upload. Aspx file upload vulnerability(CNVD-2022-60632)
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'cveId'         => 'CveId',
        'cvssScore'     => 'CvssScore',
        'fixSuggestion' => 'FixSuggestion',
        'title'         => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }
        if (null !== $this->cvssScore) {
            $res['CvssScore'] = $this->cvssScore;
        }
        if (null !== $this->fixSuggestion) {
            $res['FixSuggestion'] = $this->fixSuggestion;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }
        if (isset($map['CvssScore'])) {
            $model->cvssScore = $map['CvssScore'];
        }
        if (isset($map['FixSuggestion'])) {
            $model->fixSuggestion = $map['FixSuggestion'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
