<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListMaintainWindowsResponseBody extends Model
{
    /**
     * @var MaintainWindowForView[]
     */
    public $maintainWindowList;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maintainWindowList' => 'maintainWindowList',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->maintainWindowList)) {
            Model::validateArray($this->maintainWindowList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maintainWindowList) {
            if (\is_array($this->maintainWindowList)) {
                $res['maintainWindowList'] = [];
                $n1 = 0;
                foreach ($this->maintainWindowList as $item1) {
                    $res['maintainWindowList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['maintainWindowList'])) {
            if (!empty($map['maintainWindowList'])) {
                $model->maintainWindowList = [];
                $n1 = 0;
                foreach ($map['maintainWindowList'] as $item1) {
                    $model->maintainWindowList[$n1] = MaintainWindowForView::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
