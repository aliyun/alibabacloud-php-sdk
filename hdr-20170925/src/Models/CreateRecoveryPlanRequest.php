<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class CreateRecoveryPlanRequest extends Model
{
    /**
     * @example {
     * }
     * @var string
     */
    public $content;

    /**
     * @example forward
     *
     * @var string
     */
    public $direction;

    /**
     * @example test1
     *
     * @var string
     */
    public $name;

    /**
     * @example s-xxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $sitePairId;
    protected $_name = [
        'content'    => 'Content',
        'direction'  => 'Direction',
        'name'       => 'Name',
        'sitePairId' => 'SitePairId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sitePairId) {
            $res['SitePairId'] = $this->sitePairId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRecoveryPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SitePairId'])) {
            $model->sitePairId = $map['SitePairId'];
        }

        return $model;
    }
}
