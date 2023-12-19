<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs\backupJob;

use AlibabaCloud\Tea\Model;

class paths extends Model
{
    /**
     * @var string[]
     */
    public $path;
    protected $_name = [
        'path' => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paths
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = $map['Path'];
            }
        }

        return $model;
    }
}
