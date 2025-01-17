<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponseBody\packageJobList\packageJobs;

class packageJobList extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;
    /**
     * @var packageJobs[]
     */
    public $packageJobs;
    protected $_name = [
        'nextPageToken' => 'NextPageToken',
        'packageJobs'   => 'PackageJobs',
    ];

    public function validate()
    {
        if (\is_array($this->packageJobs)) {
            Model::validateArray($this->packageJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->packageJobs) {
            if (\is_array($this->packageJobs)) {
                $res['PackageJobs'] = [];
                $n1                 = 0;
                foreach ($this->packageJobs as $item1) {
                    $res['PackageJobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        if (isset($map['PackageJobs'])) {
            if (!empty($map['PackageJobs'])) {
                $model->packageJobs = [];
                $n1                 = 0;
                foreach ($map['PackageJobs'] as $item1) {
                    $model->packageJobs[$n1++] = packageJobs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
