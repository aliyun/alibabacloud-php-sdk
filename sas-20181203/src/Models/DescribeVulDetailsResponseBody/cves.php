<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponseBody\cves\classifys;
use AlibabaCloud\Tea\Model;

class cves extends Model
{
    /**
     * @var string
     */
    public $complexity;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $product;

    /**
     * @var int
     */
    public $pocCreateTime;

    /**
     * @var string
     */
    public $cveId;

    /**
     * @var string
     */
    public $cnvdId;

    /**
     * @var string
     */
    public $reference;

    /**
     * @var string
     */
    public $cvssScore;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var int
     */
    public $pocDisclosureTime;

    /**
     * @var string
     */
    public $cvssVector;

    /**
     * @var string
     */
    public $classify;

    /**
     * @var string
     */
    public $vulLevel;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $solution;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $poc;

    /**
     * @var classifys[]
     */
    public $classifys;
    protected $_name = [
        'complexity'        => 'Complexity',
        'summary'           => 'Summary',
        'product'           => 'Product',
        'pocCreateTime'     => 'PocCreateTime',
        'cveId'             => 'CveId',
        'cnvdId'            => 'CnvdId',
        'reference'         => 'Reference',
        'cvssScore'         => 'CvssScore',
        'vendor'            => 'Vendor',
        'pocDisclosureTime' => 'PocDisclosureTime',
        'cvssVector'        => 'CvssVector',
        'classify'          => 'Classify',
        'vulLevel'          => 'VulLevel',
        'releaseTime'       => 'ReleaseTime',
        'title'             => 'Title',
        'solution'          => 'Solution',
        'content'           => 'Content',
        'poc'               => 'Poc',
        'classifys'         => 'Classifys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complexity) {
            $res['Complexity'] = $this->complexity;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->pocCreateTime) {
            $res['PocCreateTime'] = $this->pocCreateTime;
        }
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }
        if (null !== $this->cnvdId) {
            $res['CnvdId'] = $this->cnvdId;
        }
        if (null !== $this->reference) {
            $res['Reference'] = $this->reference;
        }
        if (null !== $this->cvssScore) {
            $res['CvssScore'] = $this->cvssScore;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->pocDisclosureTime) {
            $res['PocDisclosureTime'] = $this->pocDisclosureTime;
        }
        if (null !== $this->cvssVector) {
            $res['CvssVector'] = $this->cvssVector;
        }
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->poc) {
            $res['Poc'] = $this->poc;
        }
        if (null !== $this->classifys) {
            $res['Classifys'] = [];
            if (null !== $this->classifys && \is_array($this->classifys)) {
                $n = 0;
                foreach ($this->classifys as $item) {
                    $res['Classifys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Complexity'])) {
            $model->complexity = $map['Complexity'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['PocCreateTime'])) {
            $model->pocCreateTime = $map['PocCreateTime'];
        }
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }
        if (isset($map['CnvdId'])) {
            $model->cnvdId = $map['CnvdId'];
        }
        if (isset($map['Reference'])) {
            $model->reference = $map['Reference'];
        }
        if (isset($map['CvssScore'])) {
            $model->cvssScore = $map['CvssScore'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['PocDisclosureTime'])) {
            $model->pocDisclosureTime = $map['PocDisclosureTime'];
        }
        if (isset($map['CvssVector'])) {
            $model->cvssVector = $map['CvssVector'];
        }
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Poc'])) {
            $model->poc = $map['Poc'];
        }
        if (isset($map['Classifys'])) {
            if (!empty($map['Classifys'])) {
                $model->classifys = [];
                $n                = 0;
                foreach ($map['Classifys'] as $item) {
                    $model->classifys[$n++] = null !== $item ? classifys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
