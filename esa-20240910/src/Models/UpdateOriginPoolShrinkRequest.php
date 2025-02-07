<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateOriginPoolShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $originsShrink;
    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'enabled'       => 'Enabled',
        'id'            => 'Id',
        'originsShrink' => 'Origins',
        'siteId'        => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->originsShrink) {
            $res['Origins'] = $this->originsShrink;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Origins'])) {
            $model->originsShrink = $map['Origins'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
