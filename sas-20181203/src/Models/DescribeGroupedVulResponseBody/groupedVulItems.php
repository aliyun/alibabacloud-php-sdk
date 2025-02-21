<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedVulResponseBody;

use AlibabaCloud\Dara\Model;

class groupedVulItems extends Model
{
    /**
     * @var string
     */
    public $aliasName;
    /**
     * @var int
     */
    public $asapCount;
    /**
     * @var int
     */
    public $gmtFirst;
    /**
     * @var int
     */
    public $gmtLast;
    /**
     * @var int
     */
    public $handledCount;
    /**
     * @var string
     */
    public $languageType;
    /**
     * @var int
     */
    public $laterCount;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $nntfCount;
    /**
     * @var int
     */
    public $raspDefend;
    /**
     * @var string
     */
    public $related;
    /**
     * @var string
     */
    public $tags;
    /**
     * @var int
     */
    public $totalFixCount;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName'     => 'AliasName',
        'asapCount'     => 'AsapCount',
        'gmtFirst'      => 'GmtFirst',
        'gmtLast'       => 'GmtLast',
        'handledCount'  => 'HandledCount',
        'languageType'  => 'LanguageType',
        'laterCount'    => 'LaterCount',
        'name'          => 'Name',
        'nntfCount'     => 'NntfCount',
        'raspDefend'    => 'RaspDefend',
        'related'       => 'Related',
        'tags'          => 'Tags',
        'totalFixCount' => 'TotalFixCount',
        'type'          => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->asapCount) {
            $res['AsapCount'] = $this->asapCount;
        }

        if (null !== $this->gmtFirst) {
            $res['GmtFirst'] = $this->gmtFirst;
        }

        if (null !== $this->gmtLast) {
            $res['GmtLast'] = $this->gmtLast;
        }

        if (null !== $this->handledCount) {
            $res['HandledCount'] = $this->handledCount;
        }

        if (null !== $this->languageType) {
            $res['LanguageType'] = $this->languageType;
        }

        if (null !== $this->laterCount) {
            $res['LaterCount'] = $this->laterCount;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nntfCount) {
            $res['NntfCount'] = $this->nntfCount;
        }

        if (null !== $this->raspDefend) {
            $res['RaspDefend'] = $this->raspDefend;
        }

        if (null !== $this->related) {
            $res['Related'] = $this->related;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->totalFixCount) {
            $res['TotalFixCount'] = $this->totalFixCount;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['AsapCount'])) {
            $model->asapCount = $map['AsapCount'];
        }

        if (isset($map['GmtFirst'])) {
            $model->gmtFirst = $map['GmtFirst'];
        }

        if (isset($map['GmtLast'])) {
            $model->gmtLast = $map['GmtLast'];
        }

        if (isset($map['HandledCount'])) {
            $model->handledCount = $map['HandledCount'];
        }

        if (isset($map['LanguageType'])) {
            $model->languageType = $map['LanguageType'];
        }

        if (isset($map['LaterCount'])) {
            $model->laterCount = $map['LaterCount'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NntfCount'])) {
            $model->nntfCount = $map['NntfCount'];
        }

        if (isset($map['RaspDefend'])) {
            $model->raspDefend = $map['RaspDefend'];
        }

        if (isset($map['Related'])) {
            $model->related = $map['Related'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['TotalFixCount'])) {
            $model->totalFixCount = $map['TotalFixCount'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
