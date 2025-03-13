<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAgentsResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 840016700254633984
     *
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @example text
     *
     * @var string
     */
    public $agentScene;

    /**
     * @var string
     */
    public $charactersDescription;

    /**
     * @example 1
     *
     * @var int
     */
    public $enableInteraction;

    /**
     * @example Car
     *
     * @var string
     */
    public $industry;

    /**
     * @example true
     *
     * @var bool
     */
    public $onlineSearch;

    /**
     * @example SYSTEM
     *
     * @var string
     */
    public $owner;

    /**
     * @example http
     * ;//www.abc.com/111.mp4
     * @var string
     */
    public $referenceUrl;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example RED_BOOK
     *
     * @var string
     */
    public $textStyle;

    /**
     * @example Seller
     *
     * @var string
     */
    public $viewer;
    protected $_name = [
        'agentId'               => 'agentId',
        'agentName'             => 'agentName',
        'agentScene'            => 'agentScene',
        'charactersDescription' => 'charactersDescription',
        'enableInteraction'     => 'enableInteraction',
        'industry'              => 'industry',
        'onlineSearch'          => 'onlineSearch',
        'owner'                 => 'owner',
        'referenceUrl'          => 'referenceUrl',
        'status'                => 'status',
        'textStyle'             => 'textStyle',
        'viewer'                => 'viewer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        if (null !== $this->agentName) {
            $res['agentName'] = $this->agentName;
        }
        if (null !== $this->agentScene) {
            $res['agentScene'] = $this->agentScene;
        }
        if (null !== $this->charactersDescription) {
            $res['charactersDescription'] = $this->charactersDescription;
        }
        if (null !== $this->enableInteraction) {
            $res['enableInteraction'] = $this->enableInteraction;
        }
        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }
        if (null !== $this->onlineSearch) {
            $res['onlineSearch'] = $this->onlineSearch;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->referenceUrl) {
            $res['referenceUrl'] = $this->referenceUrl;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->textStyle) {
            $res['textStyle'] = $this->textStyle;
        }
        if (null !== $this->viewer) {
            $res['viewer'] = $this->viewer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }
        if (isset($map['agentName'])) {
            $model->agentName = $map['agentName'];
        }
        if (isset($map['agentScene'])) {
            $model->agentScene = $map['agentScene'];
        }
        if (isset($map['charactersDescription'])) {
            $model->charactersDescription = $map['charactersDescription'];
        }
        if (isset($map['enableInteraction'])) {
            $model->enableInteraction = $map['enableInteraction'];
        }
        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }
        if (isset($map['onlineSearch'])) {
            $model->onlineSearch = $map['onlineSearch'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['referenceUrl'])) {
            $model->referenceUrl = $map['referenceUrl'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['textStyle'])) {
            $model->textStyle = $map['textStyle'];
        }
        if (isset($map['viewer'])) {
            $model->viewer = $map['viewer'];
        }

        return $model;
    }
}
