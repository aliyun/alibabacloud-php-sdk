<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentIconListResponseBody\infoList;

use AlibabaCloud\Tea\Model;

class entityTypeList extends Model
{
    /**
     * @example #fff
     *
     * @var string
     */
    public $displayColor;

    /**
     * @example https://img.alicdn.com/imgextra/i4/O1CN011BZBvK1oifgsWIXoO_!!60000*****-55-tps-32-32.svg
     *
     * @var string
     */
    public $displayIcon;

    /**
     * @example 5
     *
     * @var string
     */
    public $displayOrder;

    /**
     * @example [{&quot;name&quot;:&quot;${sas.trace2.name.logtime}&quot;,&quot;value&quot;:&quot;$!{time}&quot;},{&quot;name&quot;:&quot;${sas.trace2.name.node_type}&quot;,&quot;value&quot;:&quot;${sas.trace2.name.ip}&quot;},{&quot;name&quot;:&quot;${sas.trace2.property.name}&quot;,&quot;value&quot;:&quot;$!{name}&quot;}#if($p_log_time),{&quot;name&quot;:&quot;${sas.trace2.property.log_time}&quot;,&quot;value&quot;:&quot;$!{p_log_time}&quot;}#end#if($p_pid),{&quot;name&quot;:&quot;${sas.trace2.property.pid}&quot;,&quot;value&quot;:&quot;$!{p_pid}&quot;}#end#if($p_procname),{&quot;name&quot;:&quot;${sas.trace2.property.procname}&quot;,&quot;value&quot;:&quot;$!{p_procname}&quot;}#end#if($p_proc_path),{&quot;name&quot;:&quot;${sas.trace2.property.proc_path}&quot;,&quot;value&quot;:&quot;$!{p_proc_path}&quot;}#end#if($p_cmdline),{&quot;name&quot;:&quot;${sas.trace2.property.cmdline}&quot;,&quot;value&quot;:&quot;$!{p_cmdline}&quot;}#end#if($p_username),{&quot;name&quot;:&quot;${sas.trace2.property.username}&quot;,&quot;value&quot;:&quot;$!{p_username}&quot;}#end#if($p_cwd),{&quot;name&quot;:&quot;${sas.trace2.property.cwd}&quot;,&quot;value&quot;:&quot;$!{p_cwd}&quot;}#end#if($p_filepath),{&quot;name&quot;:&quot;${sas.trace2.property.filepath}&quot;,&quot;value&quot;:&quot;$!{p_filepath}&quot;}#end#if($p_md5),{&quot;name&quot;:&quot;${sas.trace2.property.md5}&quot;,&quot;value&quot;:&quot;$!{p_md5}&quot;}#end#if($p_ctime),{&quot;name&quot;:&quot;${sas.trace2.property.ctime}&quot;,&quot;value&quot;:&quot;$!{p_ctime}&quot;}#end#if($p_mtime),{&quot;name&quot;:&quot;${sas.trace2.property.mtime}&quot;,&quot;value&quot;:&quot;$!{p_mtime}&quot;}#end#if($p_size),{&quot;name&quot;:&quot;${sas.trace2.property.size}&quot;,&quot;value&quot;:&quot;$!{p_size}&quot;}#end#if($p_port),{&quot;name&quot;:&quot;${sas.trace2.property.port}&quot;,&quot;value&quot;:&quot;$!{p_port}&quot;}#end#if($p_ip),{&quot;name&quot;:&quot;${sas.trace2.property.ip}&quot;,&quot;value&quot;:&quot;$!{p_ip}&quot;}#end#if($p_src_ip),{&quot;name&quot;:&quot;${sas.trace2.property.src_ip}&quot;,&quot;value&quot;:&quot;$!{p_src_ip}&quot;}#end#if($p_dst_ip),{&quot;name&quot;:&quot;${sas.trace2.property.dst_ip}&quot;,&quot;value&quot;:&quot;$!{p_dst_ip}&quot;}#end#if($p_host),{&quot;name&quot;:&quot;${sas.trace2.property.host}&quot;,&quot;value&quot;:&quot;$!{p_host}&quot;}#end#if($p_uri),{&quot;name&quot;:&quot;${sas.trace2.property.uri}&quot;,&quot;value&quot;:&quot;$!{p_uri}&quot;}#end#if($p_post_data),{&quot;name&quot;:&quot;${sas.trace2.property.post_data}&quot;,&quot;value&quot;:&quot;$!{p_post_data}&quot;}#end#if($p_content),{&quot;name&quot;:&quot;${sas.trace2.property.content}&quot;,&quot;value&quot;:&quot;$!{p_content}&quot;}#end#if($p_type),{&quot;name&quot;:&quot;${sas.trace2.property.type}&quot;,&quot;value&quot;:&quot;$!{p_type}&quot;}#end]",
     *
     * @var string
     */
    public $displayTemplate;

    /**
     * @example 2022-12-08T15:27Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-01-11T10:16Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 8038****
     *
     * @var string
     */
    public $id;

    /**
     * @example 0
     *
     * @var string
     */
    public $isVirtualNode;

    /**
     * @example shujuku
     *
     * @var string
     */
    public $name;

    /**
     * @example kube-system
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 1
     *
     * @var string
     */
    public $traceSuccessFlag;
    protected $_name = [
        'displayColor'     => 'DisplayColor',
        'displayIcon'      => 'DisplayIcon',
        'displayOrder'     => 'DisplayOrder',
        'displayTemplate'  => 'DisplayTemplate',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'id'               => 'Id',
        'isVirtualNode'    => 'IsVirtualNode',
        'name'             => 'Name',
        'namespace'        => 'Namespace',
        'traceSuccessFlag' => 'TraceSuccessFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayColor) {
            $res['DisplayColor'] = $this->displayColor;
        }
        if (null !== $this->displayIcon) {
            $res['DisplayIcon'] = $this->displayIcon;
        }
        if (null !== $this->displayOrder) {
            $res['DisplayOrder'] = $this->displayOrder;
        }
        if (null !== $this->displayTemplate) {
            $res['DisplayTemplate'] = $this->displayTemplate;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isVirtualNode) {
            $res['IsVirtualNode'] = $this->isVirtualNode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->traceSuccessFlag) {
            $res['TraceSuccessFlag'] = $this->traceSuccessFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entityTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayColor'])) {
            $model->displayColor = $map['DisplayColor'];
        }
        if (isset($map['DisplayIcon'])) {
            $model->displayIcon = $map['DisplayIcon'];
        }
        if (isset($map['DisplayOrder'])) {
            $model->displayOrder = $map['DisplayOrder'];
        }
        if (isset($map['DisplayTemplate'])) {
            $model->displayTemplate = $map['DisplayTemplate'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsVirtualNode'])) {
            $model->isVirtualNode = $map['IsVirtualNode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['TraceSuccessFlag'])) {
            $model->traceSuccessFlag = $map['TraceSuccessFlag'];
        }

        return $model;
    }
}
