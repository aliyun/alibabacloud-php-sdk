<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveAIProduceRulesRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * This parameter is required.
     *
     * @example AppName
     *
     * @var string
     */
    public $app;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the subtitle rule.
     *
     * @example 445409ec-7eaa-461d -8f29-4bec2eb9****
     *
     * @var string
     */
    public $rulesId;

    /**
     * @description The suffix of the subtitle rule.
     *
     * >  Set the value to the name of the subtitle template.
     *
     * @example et
     *
     * @var string
     */
    public $suffixName;
    protected $_name = [
        'app' => 'App',
        'domain' => 'Domain',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'rulesId' => 'RulesId',
        'suffixName' => 'SuffixName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rulesId) {
            $res['RulesId'] = $this->rulesId;
        }
        if (null !== $this->suffixName) {
            $res['SuffixName'] = $this->suffixName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveAIProduceRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RulesId'])) {
            $model->rulesId = $map['RulesId'];
        }
        if (isset($map['SuffixName'])) {
            $model->suffixName = $map['SuffixName'];
        }

        return $model;
    }
}
