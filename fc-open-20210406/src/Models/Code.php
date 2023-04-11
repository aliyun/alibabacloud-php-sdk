<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class Code extends Model
{
    /**
     * @example demo-bucket
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @example demo-key
     *
     * @var string
     */
    public $ossObjectName;

    /**
     * @example UEsDBAoAAAAAANFUiFYAAAAAAAAAAAAAAAAFABwAY29kZS9VVAkAA6rTMGSq0zBk dXgLAAEE9gEAAAQUAAAAUEsDBBQAAAAIANFUiFaigyIV4wEAAM4DAAANABwAY29k ZS9pbmRleC5qc1VUCQADqtMwZKvTMGR1eAsAAQT2AQAABBQAAAB1k81u1DAQx+9+ irnFqVJHHCioq+UAEqIcALXlhBByktmNqWOntrPbgPZF+iy8E6+AvfYmUYFc4vH/ NzOZj+y4gS26a75/rZsR1mDwfhAGaWb4/rzyd1m+IrtIvdWme4oFpNx44cRV/wCC Rkh5Rm41oOKVRHAtglDCCS7FDzSwQe4Gg0Bb53p7WZYtyp55cRwUq3VXNroeOlTu W4OOC1k+e37x8sUFa10nc9JL5NYH7PwhQH+HH1TthFbALVQo9f73r0eCD702zrIl uAZaa+XwwRVQcykrXt/lsH4FPwmAV6yWyKTe0mzyEmobCoSJp2qQsoAs3B5W5Kwk U6qWq0bGNL5DhW+T7QtIGac8TzL5VkgNe21kc+xkAEKre254Z32s6BOenrv2MjSf hVMx3d8PaATaKCVjVlvkDZqkJmNWO3StbiCq0ZjFMGe07vP1VQIGI2e1lsJP4+pT 0k5mBA6xknn9YktOo6JoTHFcp3xRoF81oKH4Oxz9hJf1LLHYoB2XA8ZlPEFfvN/X 1YILE2AW3btj2dTLRfTLZ+pA/kNnb8LklDu/HXvM/Mh530tR8/D95XerVbaIEsfF 0g8SXszpG2f8/tAFllKohr6/+fiB2SMgNiON/gWk7QpslifHQ1g18gdQSwECHgMK AAAAAADRVIhWAAAAAAAAAAAAAAAABQAYAAAAAAAAABAA7UEAAAAAY29kZS9VVAUA A6rTMGR1eAsAAQT2AQAABBQAAABQSwECHgMUAAAACADRVIhWooMiFeMBAADOAwAA DQAYAAAAAAABAAAApIE/AAAAY29kZS9pbmRleC5qc1VUBQADqtMwZHV4CwABBPYB AAAEFAAAAFBLBQYAAAAAAgACAJ4AAABpAgAAAAA=
     *
     * @var string
     */
    public $zipFile;
    protected $_name = [
        'ossBucketName' => 'ossBucketName',
        'ossObjectName' => 'ossObjectName',
        'zipFile'       => 'zipFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossBucketName) {
            $res['ossBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossObjectName) {
            $res['ossObjectName'] = $this->ossObjectName;
        }
        if (null !== $this->zipFile) {
            $res['zipFile'] = $this->zipFile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Code
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ossBucketName'])) {
            $model->ossBucketName = $map['ossBucketName'];
        }
        if (isset($map['ossObjectName'])) {
            $model->ossObjectName = $map['ossObjectName'];
        }
        if (isset($map['zipFile'])) {
            $model->zipFile = $map['zipFile'];
        }

        return $model;
    }
}
