<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateWafRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $configShrink;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $position;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var int
     */
    public $siteVersion;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'configShrink' => 'Config',
        'id' => 'Id',
        'position' => 'Position',
        'siteId' => 'SiteId',
        'siteVersion' => 'SiteVersion',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configShrink) {
            $res['Config'] = $this->configShrink;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Config'])) {
            $model->configShrink = $map['Config'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
