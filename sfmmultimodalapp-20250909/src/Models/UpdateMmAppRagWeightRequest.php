<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;

class UpdateMmAppRagWeightRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var float[]
     */
    public $rankWeights;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'rankWeights' => 'RankWeights',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->rankWeights)) {
            Model::validateArray($this->rankWeights);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->rankWeights) {
            if (\is_array($this->rankWeights)) {
                $res['RankWeights'] = [];
                foreach ($this->rankWeights as $key1 => $value1) {
                    $res['RankWeights'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['RankWeights'])) {
            if (!empty($map['RankWeights'])) {
                $model->rankWeights = [];
                foreach ($map['RankWeights'] as $key1 => $value1) {
                    $model->rankWeights[$key1] = $value1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
