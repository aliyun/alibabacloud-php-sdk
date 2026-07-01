<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobResponseBody\projectExportJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobResponseBody\projectExportJob\exportResult\srtList;

class exportResult extends Model
{
    /**
     * @var string
     */
    public $audioUrl;

    /**
     * @var string
     */
    public $projectUrl;

    /**
     * @var srtList[]
     */
    public $srtList;

    /**
     * @var string
     */
    public $timeline;
    protected $_name = [
        'audioUrl' => 'AudioUrl',
        'projectUrl' => 'ProjectUrl',
        'srtList' => 'SrtList',
        'timeline' => 'Timeline',
    ];

    public function validate()
    {
        if (\is_array($this->srtList)) {
            Model::validateArray($this->srtList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioUrl) {
            $res['AudioUrl'] = $this->audioUrl;
        }

        if (null !== $this->projectUrl) {
            $res['ProjectUrl'] = $this->projectUrl;
        }

        if (null !== $this->srtList) {
            if (\is_array($this->srtList)) {
                $res['SrtList'] = [];
                $n1 = 0;
                foreach ($this->srtList as $item1) {
                    $res['SrtList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
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
        if (isset($map['AudioUrl'])) {
            $model->audioUrl = $map['AudioUrl'];
        }

        if (isset($map['ProjectUrl'])) {
            $model->projectUrl = $map['ProjectUrl'];
        }

        if (isset($map['SrtList'])) {
            if (!empty($map['SrtList'])) {
                $model->srtList = [];
                $n1 = 0;
                foreach ($map['SrtList'] as $item1) {
                    $model->srtList[$n1] = srtList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }

        return $model;
    }
}
