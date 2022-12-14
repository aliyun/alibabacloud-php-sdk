<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDownloadBackupSetStorageInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The expiration time of the URL.
     *
     * >  The return value is in the timestamp format.
     * @example 1661329050
     *
     * @var int
     */
    public $expirationTime;

    /**
     * @description The private download URL of the backup set.
     *
     * @example http://dbs-137383785969****-cn-hangzhou-1iv12nblw****.oss-cn-hangzhou-internal.aliyuncs.com/dt-u7u4bufa****\/dbs_target_file_path/test_123
     *
     * @var string
     */
    public $privateUrl;

    /**
     * @description The public download URL of the backup set.
     *
     * @example http://dbs-137383785969****-cn-hangzhou-1iv12nblw****.oss-cn-hangzhou.aliyuncs.com/dt-u7u4bufa****\/dbs_target_file_path/test_456
     *
     * @var string
     */
    public $publicUrl;
    protected $_name = [
        'expirationTime' => 'ExpirationTime',
        'privateUrl'     => 'PrivateUrl',
        'publicUrl'      => 'PublicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }
        if (null !== $this->privateUrl) {
            $res['PrivateUrl'] = $this->privateUrl;
        }
        if (null !== $this->publicUrl) {
            $res['PublicUrl'] = $this->publicUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }
        if (isset($map['PrivateUrl'])) {
            $model->privateUrl = $map['PrivateUrl'];
        }
        if (isset($map['PublicUrl'])) {
            $model->publicUrl = $map['PublicUrl'];
        }

        return $model;
    }
}
