<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\PurgeCachesRequest;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The cache tags that are used to purge the cache. This parameter is required if Type is set to cachetag.
     *
     * @var string[]
     */
    public $cacheTags;

    /**
     * @description The directories that are used to purge the cache. This parameter is required if Type is set to directory.
     *
     * @var string[]
     */
    public $directories;

    /**
     * @description The files to purge. This parameter is required if Type is set to file.
     *
     * @var mixed[]
     */
    public $files;

    /**
     * @description The hostnames that are used to purge the cache. This parameter is required if Type is set to hostname.
     *
     * @var string[]
     */
    public $hostnames;

    /**
     * @description The file URLs with parameters ignored that are used to purge the cache. This parameter is required if Type is set to ignoreParams.
     *
     * @var string[]
     */
    public $ignoreParams;

    /**
     * @description Specifies whether to purge all cache of the website. Default value: false. The value is true when Type is set to purgeall.
     *
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
