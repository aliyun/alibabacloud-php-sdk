<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateEnvironmentRequest extends Model
{
    /**
     * @var string
     */
    public $environmentName;

    /**
     * @var string
     */
    public $nextEnvironmentName;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'environmentName' => 'EnvironmentName',
        'nextEnvironmentName' => 'NextEnvironmentName',
        'rule' => 'Rule',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->environmentName) {
            $res['EnvironmentName'] = $this->environmentName;
        }

        if (null !== $this->nextEnvironmentName) {
            $res['NextEnvironmentName'] = $this->nextEnvironmentName;
        }

        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
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
        if (isset($map['EnvironmentName'])) {
            $model->environmentName = $map['EnvironmentName'];
        }

        if (isset($map['NextEnvironmentName'])) {
            $model->nextEnvironmentName = $map['NextEnvironmentName'];
        }

        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
