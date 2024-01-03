<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\SDK\OpenITag\V20220616\Models\ViewPlugin\visitInfo;
use AlibabaCloud\Tea\Model;

class ViewPlugin extends Model
{
    /**
     * @var string
     */
    public $bindField;

    /**
     * @var string
     */
    public $convertor;

    /**
     * @var bool
     */
    public $corsProxy;

    /**
     * @var bool
     */
    public $displayOriImg;

    /**
     * @var mixed[]
     */
    public $exif;

    /**
     * @var bool
     */
    public $hide;

    /**
     * @var mixed[]
     */
    public $plugins;

    /**
     * @var string[]
     */
    public $relationQuestionIds;

    /**
     * @var string
     */
    public $type;

    /**
     * @var visitInfo
     */
    public $visitInfo;
    protected $_name = [
        'bindField'           => 'BindField',
        'convertor'           => 'Convertor',
        'corsProxy'           => 'CorsProxy',
        'displayOriImg'       => 'DisplayOriImg',
        'exif'                => 'Exif',
        'hide'                => 'Hide',
        'plugins'             => 'Plugins',
        'relationQuestionIds' => 'RelationQuestionIds',
        'type'                => 'Type',
        'visitInfo'           => 'VisitInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindField) {
            $res['BindField'] = $this->bindField;
        }
        if (null !== $this->convertor) {
            $res['Convertor'] = $this->convertor;
        }
        if (null !== $this->corsProxy) {
            $res['CorsProxy'] = $this->corsProxy;
        }
        if (null !== $this->displayOriImg) {
            $res['DisplayOriImg'] = $this->displayOriImg;
        }
        if (null !== $this->exif) {
            $res['Exif'] = $this->exif;
        }
        if (null !== $this->hide) {
            $res['Hide'] = $this->hide;
        }
        if (null !== $this->plugins) {
            $res['Plugins'] = $this->plugins;
        }
        if (null !== $this->relationQuestionIds) {
            $res['RelationQuestionIds'] = $this->relationQuestionIds;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->visitInfo) {
            $res['VisitInfo'] = null !== $this->visitInfo ? $this->visitInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ViewPlugin
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindField'])) {
            $model->bindField = $map['BindField'];
        }
        if (isset($map['Convertor'])) {
            $model->convertor = $map['Convertor'];
        }
        if (isset($map['CorsProxy'])) {
            $model->corsProxy = $map['CorsProxy'];
        }
        if (isset($map['DisplayOriImg'])) {
            $model->displayOriImg = $map['DisplayOriImg'];
        }
        if (isset($map['Exif'])) {
            $model->exif = $map['Exif'];
        }
        if (isset($map['Hide'])) {
            $model->hide = $map['Hide'];
        }
        if (isset($map['Plugins'])) {
            $model->plugins = $map['Plugins'];
        }
        if (isset($map['RelationQuestionIds'])) {
            if (!empty($map['RelationQuestionIds'])) {
                $model->relationQuestionIds = $map['RelationQuestionIds'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VisitInfo'])) {
            $model->visitInfo = visitInfo::fromMap($map['VisitInfo']);
        }

        return $model;
    }
}
