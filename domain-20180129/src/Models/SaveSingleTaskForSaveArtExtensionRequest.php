<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveSingleTaskForSaveArtExtensionRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

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
    public $dimensions;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $dateOrPeriod;

    /**
     * @var string
     */
    public $maker;

    /**
     * @var string
     */
    public $inscriptionsAndMarkings;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $features;

    /**
     * @var string
     */
    public $reference;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'domainName'              => 'DomainName',
        'objectType'              => 'ObjectType',
        'materialsAndTechniques'  => 'MaterialsAndTechniques',
        'dimensions'              => 'Dimensions',
        'title'                   => 'Title',
        'dateOrPeriod'            => 'DateOrPeriod',
        'maker'                   => 'Maker',
        'inscriptionsAndMarkings' => 'InscriptionsAndMarkings',
        'subject'                 => 'Subject',
        'features'                => 'Features',
        'reference'               => 'Reference',
        'lang'                    => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->materialsAndTechniques) {
            $res['MaterialsAndTechniques'] = $this->materialsAndTechniques;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->dateOrPeriod) {
            $res['DateOrPeriod'] = $this->dateOrPeriod;
        }
        if (null !== $this->maker) {
            $res['Maker'] = $this->maker;
        }
        if (null !== $this->inscriptionsAndMarkings) {
            $res['InscriptionsAndMarkings'] = $this->inscriptionsAndMarkings;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->reference) {
            $res['Reference'] = $this->reference;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['MaterialsAndTechniques'])) {
            $model->materialsAndTechniques = $map['MaterialsAndTechniques'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['DateOrPeriod'])) {
            $model->dateOrPeriod = $map['DateOrPeriod'];
        }
        if (isset($map['Maker'])) {
            $model->maker = $map['Maker'];
        }
        if (isset($map['InscriptionsAndMarkings'])) {
            $model->inscriptionsAndMarkings = $map['InscriptionsAndMarkings'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }
        if (isset($map['Reference'])) {
            $model->reference = $map['Reference'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
