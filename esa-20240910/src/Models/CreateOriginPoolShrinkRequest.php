<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateOriginPoolShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var string
     */
    public $name;
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
        'name'          => 'Name',
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
