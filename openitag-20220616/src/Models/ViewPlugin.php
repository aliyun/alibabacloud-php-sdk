<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ViewPlugin\visitInfo;

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
        'bindField' => 'BindField',
        'convertor' => 'Convertor',
        'corsProxy' => 'CorsProxy',
        'displayOriImg' => 'DisplayOriImg',
        'exif' => 'Exif',
        'hide' => 'Hide',
        'plugins' => 'Plugins',
        'relationQuestionIds' => 'RelationQuestionIds',
        'type' => 'Type',
        'visitInfo' => 'VisitInfo',
    ];

    public function validate()
    {
        if (\is_array($this->exif)) {
            Model::validateArray($this->exif);
        }
        if (\is_array($this->plugins)) {
            Model::validateArray($this->plugins);
        }
        if (\is_array($this->relationQuestionIds)) {
            Model::validateArray($this->relationQuestionIds);
        }
        if (null !== $this->visitInfo) {
            $this->visitInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->exif)) {
                $res['Exif'] = [];
                foreach ($this->exif as $key1 => $value1) {
                    $res['Exif'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->hide) {
            $res['Hide'] = $this->hide;
        }

        if (null !== $this->plugins) {
            if (\is_array($this->plugins)) {
                $res['Plugins'] = [];
                foreach ($this->plugins as $key1 => $value1) {
                    $res['Plugins'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->relationQuestionIds) {
            if (\is_array($this->relationQuestionIds)) {
                $res['RelationQuestionIds'] = [];
                $n1 = 0;
                foreach ($this->relationQuestionIds as $item1) {
                    $res['RelationQuestionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->visitInfo) {
            $res['VisitInfo'] = null !== $this->visitInfo ? $this->visitInfo->toArray($noStream) : $this->visitInfo;
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
            if (!empty($map['Exif'])) {
                $model->exif = [];
                foreach ($map['Exif'] as $key1 => $value1) {
                    $model->exif[$key1] = $value1;
                }
            }
        }

        if (isset($map['Hide'])) {
            $model->hide = $map['Hide'];
        }

        if (isset($map['Plugins'])) {
            if (!empty($map['Plugins'])) {
                $model->plugins = [];
                foreach ($map['Plugins'] as $key1 => $value1) {
                    $model->plugins[$key1] = $value1;
                }
            }
        }

        if (isset($map['RelationQuestionIds'])) {
            if (!empty($map['RelationQuestionIds'])) {
                $model->relationQuestionIds = [];
                $n1 = 0;
                foreach ($map['RelationQuestionIds'] as $item1) {
                    $model->relationQuestionIds[$n1] = $item1;
                    ++$n1;
                }
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
