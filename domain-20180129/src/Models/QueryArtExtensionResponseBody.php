<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryArtExtensionResponseBody extends Model
{
    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $materialsAndTechniques;

    /**
     * @var string
     */
    public $inscriptionsAndMarkings;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $reference;

    /**
     * @var string
     */
    public $dateOrPeriod;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $features;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $maker;
    protected $_name = [
        'objectType'              => 'ObjectType',
        'materialsAndTechniques'  => 'MaterialsAndTechniques',
        'inscriptionsAndMarkings' => 'InscriptionsAndMarkings',
        'requestId'               => 'RequestId',
        'reference'               => 'Reference',
        'dateOrPeriod'            => 'DateOrPeriod',
        'dimensions'              => 'Dimensions',
        'title'                   => 'Title',
        'features'                => 'Features',
        'subject'                 => 'Subject',
        'maker'                   => 'Maker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->materialsAndTechniques) {
            $res['MaterialsAndTechniques'] = $this->materialsAndTechniques;
        }
        if (null !== $this->inscriptionsAndMarkings) {
            $res['InscriptionsAndMarkings'] = $this->inscriptionsAndMarkings;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reference) {
            $res['Reference'] = $this->reference;
        }
        if (null !== $this->dateOrPeriod) {
            $res['DateOrPeriod'] = $this->dateOrPeriod;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->maker) {
            $res['Maker'] = $this->maker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryArtExtensionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['MaterialsAndTechniques'])) {
            $model->materialsAndTechniques = $map['MaterialsAndTechniques'];
        }
        if (isset($map['InscriptionsAndMarkings'])) {
            $model->inscriptionsAndMarkings = $map['InscriptionsAndMarkings'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Reference'])) {
            $model->reference = $map['Reference'];
        }
        if (isset($map['DateOrPeriod'])) {
            $model->dateOrPeriod = $map['DateOrPeriod'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['Maker'])) {
            $model->maker = $map['Maker'];
        }

        return $model;
    }
}
