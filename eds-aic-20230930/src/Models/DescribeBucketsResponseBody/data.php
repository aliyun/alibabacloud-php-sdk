<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBucketsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBucketsResponseBody\data\ossObjectList;

class data extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $extranetEndpoint;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @var string
     */
    public $location;

    /**
     * @var ossObjectList[]
     */
    public $ossObjectList;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'bucketName' => 'BucketName',
        'extranetEndpoint' => 'ExtranetEndpoint',
        'gmtCreated' => 'GmtCreated',
        'intranetEndpoint' => 'IntranetEndpoint',
        'location' => 'Location',
        'ossObjectList' => 'OssObjectList',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->ossObjectList)) {
            Model::validateArray($this->ossObjectList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->extranetEndpoint) {
            $res['ExtranetEndpoint'] = $this->extranetEndpoint;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->ossObjectList) {
            if (\is_array($this->ossObjectList)) {
                $res['OssObjectList'] = [];
                $n1 = 0;
                foreach ($this->ossObjectList as $item1) {
                    $res['OssObjectList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['ExtranetEndpoint'])) {
            $model->extranetEndpoint = $map['ExtranetEndpoint'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['OssObjectList'])) {
            if (!empty($map['OssObjectList'])) {
                $model->ossObjectList = [];
                $n1 = 0;
                foreach ($map['OssObjectList'] as $item1) {
                    $model->ossObjectList[$n1] = ossObjectList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
