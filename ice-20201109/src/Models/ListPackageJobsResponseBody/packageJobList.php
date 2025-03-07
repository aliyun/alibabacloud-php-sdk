<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponseBody\packageJobList\packageJobs;
use AlibabaCloud\Tea\Model;

class packageJobList extends Model
{
    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. The token of the next page is returned after you call this operation for the first time.
     *
     * @example 019daf5780f74831b0e1a767c9f1c178
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description The list of packaging jobs.
     *
     * @var packageJobs[]
     */
    public $packageJobs;
    protected $_name = [
        'nextPageToken' => 'NextPageToken',
        'packageJobs'   => 'PackageJobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->packageJobs) {
            $res['PackageJobs'] = [];
            if (null !== $this->packageJobs && \is_array($this->packageJobs)) {
                $n = 0;
                foreach ($this->packageJobs as $item) {
                    $res['PackageJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packageJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PackageJobs'])) {
            if (!empty($map['PackageJobs'])) {
                $model->packageJobs = [];
                $n                  = 0;
                foreach ($map['PackageJobs'] as $item) {
                    $model->packageJobs[$n++] = null !== $item ? packageJobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
