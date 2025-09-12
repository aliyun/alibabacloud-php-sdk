<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetYzdInstanceTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetYzdInstanceTaskResultResponseBody\data\downloadUrls;

class data extends Model
{
    /**
     * @var string
     */
    public $appid;

    /**
     * @var string
     */
    public $bcid;

    /**
     * @var string
     */
    public $datasetIds;

    /**
     * @var downloadUrls[]
     */
    public $downloadUrls;

    /**
     * @var string
     */
    public $resultCnt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $timeDuration;
    protected $_name = [
        'appid' => 'appid',
        'bcid' => 'bcid',
        'datasetIds' => 'datasetIds',
        'downloadUrls' => 'downloadUrls',
        'resultCnt' => 'resultCnt',
        'status' => 'status',
        'timeDuration' => 'timeDuration',
    ];

    public function validate()
    {
        if (\is_array($this->downloadUrls)) {
            Model::validateArray($this->downloadUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appid) {
            $res['appid'] = $this->appid;
        }

        if (null !== $this->bcid) {
            $res['bcid'] = $this->bcid;
        }

        if (null !== $this->datasetIds) {
            $res['datasetIds'] = $this->datasetIds;
        }

        if (null !== $this->downloadUrls) {
            if (\is_array($this->downloadUrls)) {
                $res['downloadUrls'] = [];
                $n1 = 0;
                foreach ($this->downloadUrls as $item1) {
                    $res['downloadUrls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resultCnt) {
            $res['resultCnt'] = $this->resultCnt;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->timeDuration) {
            $res['timeDuration'] = $this->timeDuration;
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
        if (isset($map['appid'])) {
            $model->appid = $map['appid'];
        }

        if (isset($map['bcid'])) {
            $model->bcid = $map['bcid'];
        }

        if (isset($map['datasetIds'])) {
            $model->datasetIds = $map['datasetIds'];
        }

        if (isset($map['downloadUrls'])) {
            if (!empty($map['downloadUrls'])) {
                $model->downloadUrls = [];
                $n1 = 0;
                foreach ($map['downloadUrls'] as $item1) {
                    $model->downloadUrls[$n1] = downloadUrls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['resultCnt'])) {
            $model->resultCnt = $map['resultCnt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['timeDuration'])) {
            $model->timeDuration = $map['timeDuration'];
        }

        return $model;
    }
}
