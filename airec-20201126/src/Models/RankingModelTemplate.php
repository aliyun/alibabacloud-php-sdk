<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\SDK\Airec\V20201126\Models\RankingModelTemplate\meta;
use AlibabaCloud\Tea\Model;

class RankingModelTemplate extends Model
{
    /**
     * @var meta
     */
    public $meta;

    /**
     * @example TRAINING_SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example a-a-a
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 3
     *
     * @var int
     */
    public $versionNum;
    protected $_name = [
        'meta'       => 'Meta',
        'status'     => 'Status',
        'templateId' => 'TemplateId',
        'versionNum' => 'VersionNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meta) {
            $res['Meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->versionNum) {
            $res['VersionNum'] = $this->versionNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RankingModelTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Meta'])) {
            $model->meta = meta::fromMap($map['Meta']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['VersionNum'])) {
            $model->versionNum = $map['VersionNum'];
        }

        return $model;
    }
}
