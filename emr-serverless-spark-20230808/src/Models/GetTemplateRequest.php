<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateRequest extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The template type.
     *
     *   TASK
     *   SESSION
     *
     * @example TASK
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'regionId'     => 'regionId',
        'templateType' => 'templateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->templateType) {
            $res['templateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['templateType'])) {
            $model->templateType = $map['templateType'];
        }

        return $model;
    }
}
