<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsResponseBody\items\ossDownload;

class items extends Model
{
    /**
     * @var ossDownload[]
     */
    public $ossDownload;
    protected $_name = [
        'ossDownload' => 'OssDownload',
    ];

    public function validate()
    {
        if (\is_array($this->ossDownload)) {
            Model::validateArray($this->ossDownload);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossDownload) {
            if (\is_array($this->ossDownload)) {
                $res['OssDownload'] = [];
                $n1 = 0;
                foreach ($this->ossDownload as $item1) {
                    $res['OssDownload'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OssDownload'])) {
            if (!empty($map['OssDownload'])) {
                $model->ossDownload = [];
                $n1 = 0;
                foreach ($map['OssDownload'] as $item1) {
                    $model->ossDownload[$n1] = ossDownload::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
