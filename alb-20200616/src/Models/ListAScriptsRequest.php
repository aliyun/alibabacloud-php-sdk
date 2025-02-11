<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;

class ListAScriptsRequest extends Model
{
    /**
     * @var string[]
     */
    public $AScriptIds;
    /**
     * @var string[]
     */
    public $AScriptNames;
    /**
     * @var string[]
     */
    public $listenerIds;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'AScriptIds'   => 'AScriptIds',
        'AScriptNames' => 'AScriptNames',
        'listenerIds'  => 'ListenerIds',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->AScriptIds)) {
            Model::validateArray($this->AScriptIds);
        }
        if (\is_array($this->AScriptNames)) {
            Model::validateArray($this->AScriptNames);
        }
        if (\is_array($this->listenerIds)) {
            Model::validateArray($this->listenerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AScriptIds) {
            if (\is_array($this->AScriptIds)) {
                $res['AScriptIds'] = [];
                $n1                = 0;
                foreach ($this->AScriptIds as $item1) {
                    $res['AScriptIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->AScriptNames) {
            if (\is_array($this->AScriptNames)) {
                $res['AScriptNames'] = [];
                $n1                  = 0;
                foreach ($this->AScriptNames as $item1) {
                    $res['AScriptNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->listenerIds) {
            if (\is_array($this->listenerIds)) {
                $res['ListenerIds'] = [];
                $n1                 = 0;
                foreach ($this->listenerIds as $item1) {
                    $res['ListenerIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['AScriptIds'])) {
            if (!empty($map['AScriptIds'])) {
                $model->AScriptIds = [];
                $n1                = 0;
                foreach ($map['AScriptIds'] as $item1) {
                    $model->AScriptIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AScriptNames'])) {
            if (!empty($map['AScriptNames'])) {
                $model->AScriptNames = [];
                $n1                  = 0;
                foreach ($map['AScriptNames'] as $item1) {
                    $model->AScriptNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ListenerIds'])) {
            if (!empty($map['ListenerIds'])) {
                $model->listenerIds = [];
                $n1                 = 0;
                foreach ($map['ListenerIds'] as $item1) {
                    $model->listenerIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
