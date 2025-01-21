<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportAppAlertRulesRequest\tags;

class ImportAppAlertRulesRequest extends Model
{
    /**
     * @var string
     */
    public $contactGroupIds;
    /**
     * @var bool
     */
    public $isAutoStart;
    /**
     * @var string
     */
    public $pids;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $templageAlertConfig;
    /**
     * @var string
     */
    public $templateAlertId;
    protected $_name = [
        'contactGroupIds'     => 'ContactGroupIds',
        'isAutoStart'         => 'IsAutoStart',
        'pids'                => 'Pids',
        'regionId'            => 'RegionId',
        'tags'                => 'Tags',
        'templageAlertConfig' => 'TemplageAlertConfig',
        'templateAlertId'     => 'TemplateAlertId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupIds) {
            $res['ContactGroupIds'] = $this->contactGroupIds;
        }

        if (null !== $this->isAutoStart) {
            $res['IsAutoStart'] = $this->isAutoStart;
        }

        if (null !== $this->pids) {
            $res['Pids'] = $this->pids;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->templageAlertConfig) {
            $res['TemplageAlertConfig'] = $this->templageAlertConfig;
        }

        if (null !== $this->templateAlertId) {
            $res['TemplateAlertId'] = $this->templateAlertId;
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
        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIds = $map['ContactGroupIds'];
        }

        if (isset($map['IsAutoStart'])) {
            $model->isAutoStart = $map['IsAutoStart'];
        }

        if (isset($map['Pids'])) {
            $model->pids = $map['Pids'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TemplageAlertConfig'])) {
            $model->templageAlertConfig = $map['TemplageAlertConfig'];
        }

        if (isset($map['TemplateAlertId'])) {
            $model->templateAlertId = $map['TemplateAlertId'];
        }

        return $model;
    }
}
