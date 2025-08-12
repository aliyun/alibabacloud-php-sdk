<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\QueryLiveDomainMultiStreamListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\QueryLiveDomainMultiStreamListResponseBody\onlineStreams\changeLogs;
use AlibabaCloud\SDK\Live\V20161101\Models\QueryLiveDomainMultiStreamListResponseBody\onlineStreams\upstreamList;

class onlineStreams extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var changeLogs[]
     */
    public $changeLogs;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $optimalMode;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var upstreamList[]
     */
    public $upstreamList;
    protected $_name = [
        'appName' => 'AppName',
        'changeLogs' => 'ChangeLogs',
        'domain' => 'Domain',
        'optimalMode' => 'OptimalMode',
        'streamName' => 'StreamName',
        'upstreamList' => 'UpstreamList',
    ];

    public function validate()
    {
        if (\is_array($this->changeLogs)) {
            Model::validateArray($this->changeLogs);
        }
        if (\is_array($this->upstreamList)) {
            Model::validateArray($this->upstreamList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->changeLogs) {
            if (\is_array($this->changeLogs)) {
                $res['ChangeLogs'] = [];
                $n1 = 0;
                foreach ($this->changeLogs as $item1) {
                    $res['ChangeLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->optimalMode) {
            $res['OptimalMode'] = $this->optimalMode;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        if (null !== $this->upstreamList) {
            if (\is_array($this->upstreamList)) {
                $res['UpstreamList'] = [];
                $n1 = 0;
                foreach ($this->upstreamList as $item1) {
                    $res['UpstreamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ChangeLogs'])) {
            if (!empty($map['ChangeLogs'])) {
                $model->changeLogs = [];
                $n1 = 0;
                foreach ($map['ChangeLogs'] as $item1) {
                    $model->changeLogs[$n1] = changeLogs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['OptimalMode'])) {
            $model->optimalMode = $map['OptimalMode'];
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        if (isset($map['UpstreamList'])) {
            if (!empty($map['UpstreamList'])) {
                $model->upstreamList = [];
                $n1 = 0;
                foreach ($map['UpstreamList'] as $item1) {
                    $model->upstreamList[$n1] = upstreamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
