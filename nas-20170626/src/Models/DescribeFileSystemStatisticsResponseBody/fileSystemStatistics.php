<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystemStatistics\fileSystemStatistic;

class fileSystemStatistics extends Model
{
    /**
     * @var fileSystemStatistic[]
     */
    public $fileSystemStatistic;
    protected $_name = [
        'fileSystemStatistic' => 'FileSystemStatistic',
    ];

    public function validate()
    {
        if (\is_array($this->fileSystemStatistic)) {
            Model::validateArray($this->fileSystemStatistic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemStatistic) {
            if (\is_array($this->fileSystemStatistic)) {
                $res['FileSystemStatistic'] = [];
                $n1                         = 0;
                foreach ($this->fileSystemStatistic as $item1) {
                    $res['FileSystemStatistic'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FileSystemStatistic'])) {
            if (!empty($map['FileSystemStatistic'])) {
                $model->fileSystemStatistic = [];
                $n1                         = 0;
                foreach ($map['FileSystemStatistic'] as $item1) {
                    $model->fileSystemStatistic[$n1++] = fileSystemStatistic::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
