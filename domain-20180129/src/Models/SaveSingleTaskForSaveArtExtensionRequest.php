<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveSingleTaskForSaveArtExtensionRequest extends Model
{
    /**
     * @example 2019-10-01
     *
     * @var string
     */
    public $dateOrPeriod;

    /**
     * @example 20 cm
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description This parameter is required.
     *
     * @example test.art
     *
     * @var string
     */
    public $domainName;

    /**
     * @example iconicity
     *
     * @var string
     */
    public $features;

    /**
     * @example realism
     *
     * @var string
     */
    public $inscriptionsAndMarkings;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example zhang san
     *
     * @var string
     */
    public $maker;

    /**
     * @example silk
     *
     * @var string
     */
    public $materialsAndTechniques;

    /**
     * @example The embroidery
     *
     * @var string
     */
    public $objectType;

    /**
     * @example drawings
     *
     * @var string
     */
    public $reference;

    /**
     * @example peace
     *
     * @var string
     */
    public $subject;

    /**
     * @example Peace and friendship
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'dateOrPeriod'            => 'DateOrPeriod',
        'dimensions'              => 'Dimensions',
        'domainName'              => 'DomainName',
        'features'                => 'Features',
        'inscriptionsAndMarkings' => 'InscriptionsAndMarkings',
        'lang'                    => 'Lang',
        'maker'                   => 'Maker',
        'materialsAndTechniques'  => 'MaterialsAndTechniques',
        'objectType'              => 'ObjectType',
        'reference'               => 'Reference',
        'subject'                 => 'Subject',
        'title'                   => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateOrPeriod) {
            $res['DateOrPeriod'] = $this->dateOrPeriod;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->inscriptionsAndMarkings) {
            $res['InscriptionsAndMarkings'] = $this->inscriptionsAndMarkings;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->maker) {
            $res['Maker'] = $this->maker;
        }
        if (null !== $this->materialsAndTechniques) {
            $res['MaterialsAndTechniques'] = $this->materialsAndTechniques;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->reference) {
            $res['Reference'] = $this->reference;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveSingleTaskForSaveArtExtensionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateOrPeriod'])) {
            $model->dateOrPeriod = $map['DateOrPeriod'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }
        if (isset($map['InscriptionsAndMarkings'])) {
            $model->inscriptionsAndMarkings = $map['InscriptionsAndMarkings'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Maker'])) {
            $model->maker = $map['Maker'];
        }
        if (isset($map['MaterialsAndTechniques'])) {
            $model->materialsAndTechniques = $map['MaterialsAndTechniques'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['Reference'])) {
            $model->reference = $map['Reference'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
