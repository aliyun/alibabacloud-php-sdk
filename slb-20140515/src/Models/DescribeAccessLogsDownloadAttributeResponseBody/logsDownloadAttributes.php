<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessLogsDownloadAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessLogsDownloadAttributeResponseBody\logsDownloadAttributes\logsDownloadAttribute;

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
        if (\is_array($this->logsDownloadAttribute)) {
            Model::validateArray($this->logsDownloadAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logsDownloadAttribute) {
            if (\is_array($this->logsDownloadAttribute)) {
                $res['LogsDownloadAttribute'] = [];
                $n1 = 0;
                foreach ($this->logsDownloadAttribute as $item1) {
                    $res['LogsDownloadAttribute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LogsDownloadAttribute'])) {
            if (!empty($map['LogsDownloadAttribute'])) {
                $model->logsDownloadAttribute = [];
                $n1 = 0;
                foreach ($map['LogsDownloadAttribute'] as $item1) {
                    $model->logsDownloadAttribute[$n1] = logsDownloadAttribute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
