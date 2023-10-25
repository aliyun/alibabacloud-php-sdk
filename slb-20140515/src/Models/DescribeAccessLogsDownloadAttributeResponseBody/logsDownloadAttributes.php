<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessLogsDownloadAttributeResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessLogsDownloadAttributeResponseBody\logsDownloadAttributes\logsDownloadAttribute;
use AlibabaCloud\Tea\Model;

class logsDownloadAttributes extends Model
{
    /**
     * @var logsDownloadAttribute[]
     */
    public $logsDownloadAttribute;
    protected $_name = [
        'logsDownloadAttribute' => 'LogsDownloadAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logsDownloadAttribute) {
            $res['LogsDownloadAttribute'] = [];
            if (null !== $this->logsDownloadAttribute && \is_array($this->logsDownloadAttribute)) {
                $n = 0;
                foreach ($this->logsDownloadAttribute as $item) {
                    $res['LogsDownloadAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logsDownloadAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogsDownloadAttribute'])) {
            if (!empty($map['LogsDownloadAttribute'])) {
                $model->logsDownloadAttribute = [];
                $n                            = 0;
                foreach ($map['LogsDownloadAttribute'] as $item) {
                    $model->logsDownloadAttribute[$n++] = null !== $item ? logsDownloadAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
