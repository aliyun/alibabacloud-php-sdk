<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class cves extends Model
{
    /**
     * @var string
     */
    public $cveId;

    /**
     * @var string
     */
    public $cvssScore;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'cveId'     => 'CveId',
        'cvssScore' => 'CvssScore',
        'summary'   => 'Summary',
        'title'     => 'Title',
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
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cves
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
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
