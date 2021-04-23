<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddMultiRateConfigRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $avFormat;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $isLazy;

    /**
     * @var string
     */
    public $isTimeAlign;

    /**
     * @var string
     */
    public $templates;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'domainName'  => 'DomainName',
        'app'         => 'App',
        'avFormat'    => 'AvFormat',
        'groupId'     => 'GroupId',
        'isLazy'      => 'IsLazy',
        'isTimeAlign' => 'IsTimeAlign',
        'templates'   => 'Templates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->avFormat) {
            $res['AvFormat'] = $this->avFormat;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->isLazy) {
            $res['IsLazy'] = $this->isLazy;
        }
        if (null !== $this->isTimeAlign) {
            $res['IsTimeAlign'] = $this->isTimeAlign;
        }
        if (null !== $this->templates) {
            $res['Templates'] = $this->templates;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMultiRateConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['AvFormat'])) {
            $model->avFormat = $map['AvFormat'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IsLazy'])) {
            $model->isLazy = $map['IsLazy'];
        }
        if (isset($map['IsTimeAlign'])) {
            $model->isTimeAlign = $map['IsTimeAlign'];
        }
        if (isset($map['Templates'])) {
            $model->templates = $map['Templates'];
        }

        return $model;
    }
}
