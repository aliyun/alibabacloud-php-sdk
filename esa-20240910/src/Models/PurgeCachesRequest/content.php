<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\PurgeCachesRequest;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var string[]
     */
    public $cacheTags;

    /**
     * @var string[]
     */
    public $directories;

    /**
     * @var mixed[]
     */
    public $files;

    /**
     * @var string[]
     */
    public $hostnames;

    /**
     * @var string[]
     */
    public $ignoreParams;

    /**
     * @example true
     *
     * @var bool
     */
    public $purgeAll;
    protected $_name = [
        'cacheTags'    => 'CacheTags',
        'directories'  => 'Directories',
        'files'        => 'Files',
        'hostnames'    => 'Hostnames',
        'ignoreParams' => 'IgnoreParams',
        'purgeAll'     => 'PurgeAll',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheTags) {
            $res['CacheTags'] = $this->cacheTags;
        }
        if (null !== $this->directories) {
            $res['Directories'] = $this->directories;
        }
        if (null !== $this->files) {
            $res['Files'] = $this->files;
        }
        if (null !== $this->hostnames) {
            $res['Hostnames'] = $this->hostnames;
        }
        if (null !== $this->ignoreParams) {
            $res['IgnoreParams'] = $this->ignoreParams;
        }
        if (null !== $this->purgeAll) {
            $res['PurgeAll'] = $this->purgeAll;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheTags'])) {
            if (!empty($map['CacheTags'])) {
                $model->cacheTags = $map['CacheTags'];
            }
        }
        if (isset($map['Directories'])) {
            if (!empty($map['Directories'])) {
                $model->directories = $map['Directories'];
            }
        }
        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = $map['Files'];
            }
        }
        if (isset($map['Hostnames'])) {
            if (!empty($map['Hostnames'])) {
                $model->hostnames = $map['Hostnames'];
            }
        }
        if (isset($map['IgnoreParams'])) {
            if (!empty($map['IgnoreParams'])) {
                $model->ignoreParams = $map['IgnoreParams'];
            }
        }
        if (isset($map['PurgeAll'])) {
            $model->purgeAll = $map['PurgeAll'];
        }

        return $model;
    }
}
